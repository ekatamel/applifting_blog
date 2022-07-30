// Code for displaying image preview once uploaded and updating it if image is replaced

const input = document.querySelector("#file");
const preview = document.querySelector(".preview");
const previousImage = document.querySelector(".articles__image");

console.log(previousImage);

input.addEventListener("change", updateImageDisplay);

const fileTypes = [
    "image/apng",
    "image/bmp",
    "image/gif",
    "image/jpeg",
    "image/pjpeg",
    "image/png",
    "image/svg+xml",
    "image/tiff",
    "image/webp",
    "image/x-icon",
];

function validFileType(file) {
    return fileTypes.includes(file.type);
}

function updateImageDisplay() {
    if (previousImage) {
        previousImage.remove();
    }
    while (preview.firstChild) {
        preview.removeChild(preview.firstChild);
    }

    const curFiles = input.files;
    if (curFiles.length === 0) {
        const para = document.createElement("p");
        para.textContent = "No files currently selected for upload";
        preview.appendChild(para);
    } else {
        const imageContainer = document.createElement("div");
        imageContainer.classList.add("article__imagecontainer");
        preview.appendChild(imageContainer);

        for (const file of curFiles) {
            const para = document.createElement("p");
            if (validFileType(file)) {
                const image = document.createElement("img");
                image.classList.add("articles__image-preview");
                image.src = URL.createObjectURL(file);

                imageContainer.appendChild(image);
            } else {
                para.textContent = `File name ${file.name}: Not a valid file type. Update your selection.`;
                imageContainer.appendChild(para);
            }
        }
    }
}
