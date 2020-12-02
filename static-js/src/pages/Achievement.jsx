import React from "react";

import "../css/achievement.css";
import "../css/blog.css";

import blog_template_image from "../img/EFIENS-04.png";

const contests = [
  {
    img_link: "https://ctftime.org/static/images/nologo.png",
    name: "TetCTF",
    rank: "1/167",
  },
]

const nsu_prizes = [
  {
    link: "https://nsucrypto.nsu.ru/archive/2019/total_results/#data",
    name: "NSUCRYPTO 2019",
    prizes: [
      {
        rank: "Second place (rank 2)",
        players: "Ngoc Ky Nguyen, Dung Truong, Phuoc Nguyen Ho Minh",
        d: "for university students",
      },
      {
        rank: "Second place (rank 3)",
        players: "Thanh Nguyen Van, Quoc Bao Nguyen, Ngan Nguyen",
        d: "for university students",
      },
      {
        rank: "Second place (rank 2)",
        players: "Duc Tri Nguyen, Tuong Nguyen (and 1 other)",
        d: "for professionals",
      },
    ],
  }
]

const achievements = []

const blogs = []

function Achievement() {
  document.title = "Achievement - Efiens"
  return (
    <div>
      <h3>CTF contest</h3>
        <div className="ctf-contest">
          {
            contests.map(({img_link, name, rank}) =>
              <div className="contest" key={name}>
                  <img src={img_link} alt={name} />
                  <h4>{name}</h4>
                  <p>Rank: {rank}</p>
              </div>
            )
          }
        </div>

      <h3>NSUCRYPTO Contest</h3>
        <table className="content-table">
          <thead>
            <tr>
              <th>Place</th>
              <th>Name</th>
              <th>Type</th>
            </tr>
          </thead>
          <tbody>
            {
              nsu_prizes.map(({link, name, prizes}) =>
                <>
                  <tr key={name}>
                      <td><a href={link} target="_blank" rel="noreferrer">{name}</a></td>
                  </tr>
                  {
                    prizes.map(({rank, players, d}, i) =>
                      <tr key={i}>
                          <td>{rank}</td>
                          <td>{players}</td>
                          <td>{d}</td>
                      </tr>
                    )
                  }
                </>
              )
            }
          </tbody>
        </table>

      <h3>Publication / Conference</h3>
        { true ? null : // disable temporarily
        <div className="achievement">
          {
            achievements.map(({link, image, date, name, description}) =>
              <div className="achievement-slider" key={link}>
                  <div className="achievement-slider__wrp swiper-wrapper">
                      <div className="achievement-slider__item swiper-slide">
                      <div className="achievement-slider__img">
                          <img src={image} alt="" />
                      </div>
                      <div className="achievement-slider__content">
                          <span className="achievement-slider__code">{date}</span>
                          <div className="achievement-slider__title">{name}</div>
                          <div className="achievement-slider__text">{description}</div>
                          <a href={link} className="achievement-slider__button">READ MORE</a>
                      </div>
                      </div>
                  </div>
              </div>
            )
          }
        </div>
        }

        <div className="blog">
          {
            blogs.map(({link, image, day, month, category, title, author, description, tags}) =>
              <div key={title}>
                <article className="card">
                <header className="card__thumb">
                    <a href={link} target="_blank" rel="noreferrer"><img src={image ? image : blog_template_image} alt=""/></a>
                </header>
                <date className="card__date">
                    <span className="card__date__day">{day}</span>
                    <br/>
                    <span className="card__date__month">{month}</span>
                </date>

                <div className="card__body">
                    <div className="card__category"><a href="#">{category}</a></div>
                    <h2 className="card__title"><a href={link} target="_blank" rel="noreferrer">{title}</a></h2>
                    <div className="card__subtitle">{author}</div>
                    <p className="card__description text">{description}</p>
                </div>

                <footer className="card__footer">
                    Tags: {tags}
                </footer>
                </article>
              </div>
            )
          }
        </div>
    </div>
  )
}

export default Achievement;
