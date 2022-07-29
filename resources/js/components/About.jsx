import AboutBox from "./AboutBox";
import aboutInfo from "../data/aboutInfo";

function About() {
    return (
        <div className="about">
            <h1 className="about__maintitle">Welcome to Applifting blog!</h1>
            <h2 className="about__subtitle">Here you can...</h2>
            <div className="about__content">
                {aboutInfo.map((info, index) => {
                    return <AboutBox key={index} data={info} />;
                })}
            </div>
        </div>
    );
}

export default About;
