function AboutBox({ data }) {
    const { imageUrl, title, activities, link } = data;

    return (
        <div className="about__box">
            <img className="about__image" src={imageUrl} alt="" />
            <h3 className="about__heading">{title}</h3>
            <ul className="about__list">
                {activities.map((activity, index) => {
                    return (
                        <li className="about__item" key={index}>
                            <img
                                className="about__icon"
                                src="/images/icons/checked.png"
                                alt=""
                            />
                            {activity}
                        </li>
                    );
                })}
            </ul>
            <a className="about__button" href={link}>
                Start now
            </a>
        </div>
    );
}

export default AboutBox;
