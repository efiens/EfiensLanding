import React from "react";

import podium from "../img/icon/podium.png"
import man from "../img/icon/man.png"
import science from "../img/icon/science-research.png"
import cryptography from "../img/icon/cryptography.png"

function Home() {
  document.title = "Home - Efiens"
  return (
    <>
      <div className="container-xl container-cus" style={{"marginTop": "-6rem", "textAlign": "center"}}>
          <div className="activity__content">
              <div className="activity__content__item">
                  <img className="activity__content__item__icon" src={podium} alt="Active CTF Competitor" />
                  <h4>Active CTF Competitor</h4>
                  <p>Efiens is an active member of CTFtime.org. We have been participating in a huge number of competitions both nationwide and worldwide. </p>
              </div>
              <div className="activity__content__item">
                  <img className="activity__content__item__icon" src={man} alt="Weekly sharing" />
                  <h4>Weekly sharing</h4>
                  <p>We are eager to learn and share new knowledge about cybersecurity. Every week, the team’s members host several seminars to discuss solutions to CTF problems or relevant topics of cybersecurity.</p>
              </div>
              <div className="activity__content__item">
                  <img className="activity__content__item__icon" src={science} alt="Educational resources" />
                  <h4>Educational resources</h4>
                  <p>Ever since founded, we have cummulated a vast amount of resources of all topics in cybersecurity via doing research and practicing CTFs for both educational purposes and enterprise solutions. Every year, we also nominate young and talented people for internships and job opportunities in the industry.</p>
              </div>
              <div className="activity__content__item">
                  <img className="activity__content__item__icon" src={cryptography} alt="Applied cryptography research" />
                  <h4>Applied cryptography research</h4>
                  <p>Efiens was originally a cryptography research team. We research novel cryptographic topics both theoretical and practical. Through time, many of our members have acquired scholarships for postgraduate study in this field at top-ranking universities.</p>
              </div>
          </div>
      </div>
      <div className="ourteam">
          <div className="container-xl container-cus ourteam__content" style={{"marginTop": "-3rem"}}>
              <div>
                  <h3>Our Team</h3>
                  <p style={{"marginBottom": "2rem"}}>With our team of more than 25 members, we believe to maintain the activities of cyber security field growing constantly in HCMUT and to keep the educational environment for our potential, well-trained future security engineers.</p>
                  <a href="/member" className="ourteam__button">See members</a>
              </div>
              <img className="ourteam__img" src="https://miro.medium.com/max/764/1*DR3m8YaZrHX32fnCaK8Ppg.png" alt="members" />
          </div>
      </div>
    </>
  );
}

export default Home;
