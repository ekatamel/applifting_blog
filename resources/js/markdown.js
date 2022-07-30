// Code for getting markdown content from the editor and adding to a hidden form element to be send with form submit
import Editor from "@toast-ui/editor";
import "@toast-ui/editor/dist/toastui-editor.css";

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "400px",
    initialEditType: "markdown",
    placeholder: "Write something cool!",
});

document.querySelector("#articles__form").addEventListener("submit", (e) => {
    e.preventDefault();
    document.querySelector("#content").value = editor.getMarkdown();
    e.target.submit();
});
