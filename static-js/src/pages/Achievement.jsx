import React from "react";

import "../css/achievement.css";
import "../css/blog.css";

import blog_template_image from "../img/EFIENS-04.png";

const contests = [
  {
    img_link: "https://ctftime.org/static/images/nologo.png",
    name: "TetCTF 2020",
    rank: "1/167",
  },
  {
    img_link: "https://ctftime.org/media/cache/1c/4f/1c4f5d3ae15b0974026b301ea065c1a3.png",
    name: "DarkCTF 2020",
    rank: "7/808",
  },
  {
    img_link: "https://ctftime.org/media/cache/4d/f6/4df672bc635593eafc6018ca7cb1424f.png",
    name: "ångstromCTF 2020",
    rank: "8/1596",
  },
  {
    img_link: "https://ctftime.org/media/cache/07/bb/07bbf0b9505ef8f210de38709929bf8d.png",
    name: "InCTF 2020",
    rank: "20/557",
  },
  {
    img_link: "https://ctftime.org/media/cache/4d/49/4d491dd66dfe1d3dc328473e51677204.png",
    name: "Aero CTF 2020",
    rank: "22/273",
  },
  {
    img_link: "https://ctftime.org/media/cache/e4/ca/e4ca63164dc07f06b3b9cc858379a71b.png",
    name: "justCTF 2019",
    rank: "7/347",
  },
  {
    img_link: "https://ctftime.org/media/cache/86/ba/86bae7efae97afa65b76c37e4c17a031.png",
    name: "Pwn2Win CTF 2019",
    rank: "13/220",
  },
  {
    img_link: "https://ctftime.org/media/cache/b6/2a/b62a4273af867541f65c1105f341faca.png",
    name: "InCTF 2019",
    rank: "11/433",
  },
  {
    img_link: "https://ctftime.org/media/cache/ca/16/ca162d39a9fa1e02c12199407b8fb963.png",
    name: "ISITDTU CTF 2019 Finals",
    rank: "8/12",
  },
  {
    img_link: "https://ctftime.org/media/cache/10/af/10af3d65f221a312e4d8e3ed98beb224.png",
    name: "AceBear Security Contest 2019",
    rank: "3/142",
  },
  {
    img_link: "https://ctftime.org/media/cache/ec/ff/ecff7159a4972b56caaa55cfce2de18b.png",
    name: "ISITDTU CTF 2018 Final",
    rank: "8/12",
  },
  {
    img_link: "https://ctftime.org/media/cache/35/66/356681eca2e48abd4214a24daa983a59.png",
    name: "AceBear Security Contest 2018",
    rank: "9/139",
  },
  {
    img_link: "https://ctftime.org/media/cache/4b/58/4b58b9e55897fb542c2933ed3c1c423b.png",
    name: "TUCTF 2018",
    rank: "70/764",
  },
  {
    img_link: "https://ctftime.org/media/cache/a1/1e/a11ea05f01614b194bba530b2ec9f0a2.png",
    name: "picoCTF 2018",
    rank: "47/2898",
  },
  {
    img_link: "https://ctftime.org/media/cache/07/3a/073a6bba53f3092489ea4e2ece18d8c3.png",
    name: "HSCTF 5",
    rank: "31/458",
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
        rank: "Third place (rank 5)",
        players: "Duc Tri Nguyen, Tuong Nguyen (and 1 other)",
        d: "for professionals",
      },
      {
        rank: "Diploma",
        players: "Phu Nghia Nguyen (and 2 others)",
        d: "for professionals",
      }
    ],
  },
  {
    link: "https://nsucrypto.nsu.ru/archive/2018/total_results/#data",
    name: "NSUCRYPTO 2018",
    prizes: [
      {
        rank: "Second place (rank 4)",
        players: "Thanh Nguyen Van, Tuong Nguyen Van (and 1 other)",
        d: "for university students",
      },
      {
        rank: "Third place (rank 5)",
        players: "Ngoc Ky Nguyen, Phuoc Nguyen Ho Minh (and 1 other)",
        d: "for university students",
      },
      {
        rank: "Diploma",
        players: "Duc Tri Nguyen, Quoc Bao Nguyen (and 1 other)",
        d: "for professionals",
      },
    ],
  },
  {
    link: "https://nsucrypto.nsu.ru/archive/2017/total_results/#data",
    name: "NSUCRYPTO 2017",
    prizes: [
      {
        rank: "Third place (rank 5)",
        players: "Ngoc Ky Nguyen, Thanh Nguyen Van, Phuoc Nguyen Ho Minh",
        d: "for university students",
      },
      {
        rank: "Third place (rank 4)",
        players: "Duc Tri Nguyen (and 2 others)",
        d: "for professionals",
      },
    ],
  },
  {
    link: "https://nsucrypto.nsu.ru/archive/2016/total_results/#data",
    name: "NSUCRYPTO 2016",
    prizes: [
      {
        rank: "Third place (rank 5)",
        players: "Duc Tri Nguyen (and 2 others)",
        d: "for professionals",
      },
    ],
  }
]

const achievements = [
  {
    link: "https://doi.org/10.1007/978-981-33-4370-2_7",
    image: "",
    date: "November 25-27, 2020",
    name: "Improving ModSecurity WAF with Machine Learning Methods",
    description: "The goal of this paper is to develop a WAF system based on ModSecurity with ModSecurity CRS, which focuses on reducing the false-positive rate of ModSecurity CRS based on machine learning methods.",
  },
  {
    link: "https://doi.org/10.1007/978-3-030-35653-8_32",
    image: "",
    date: "November 27-29, 2019",
    name: "Detect Abnormal Behaviours in Ethereum Smart Contracts Using Attack Vectors",
    description: "In this paper, we classify attack vectors of Ethereum smart contracts, then propose some behaviour-based methods to detect them.",
  },
  {
    link: "https://doi.org/10.1109/blockchain.2019.00083",
    image: "",
    date: "July 14-17, 2019",
    name: "Scalable Distributed Random Number Generation Based on Homomorphic Encryption",
    description: "We present a protocol which can be implemented on a blockchain that ensures unpredictable, tamper-resistant, scalable and publicly-verifiable outcomes.",
  },
  {
    link: "https://doi.org/10.1109/edocw.2019.00028",
    image: "",
    date: "October 28-31, 2019",
    name: "A System for Scalable Decentralized Random Number Generation",
    description: "We demonstrate a system of random number generation service for generating fair, tamper-resistant, and verifiable random numbers.",
  },
  {
    link: "https://doi.org/10.1007/978-3-030-35653-8_34",
    image: "",
    date: "November 27-29, 2019",
    name: "Blockchain-Based Open Data: An Approach for Resolving Data Integrity and Transparency",
    description: "In this paper, we design and implement a mechanism for secure storing and exchanging open data leveraging Hyperledger Fabric and IPFS (InterPlanetary File System).",
  },
]

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
