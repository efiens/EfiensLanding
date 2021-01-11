import React from "react";

import "../css/member.css";

function renderMember(member, key, type) {
  const title = member.title ? member.title : type;
  const fb = member.fb
    ? <a className="social" href={member.fb} target="_blank">
      <i className="fa fa-facebook-square"></i>
    </a>
    : null;

  const tw = member.tw
    ? <a className="social" href={member.tw} target="_blank">
      <i className="fa fa-twitter-square"></i>
    </a>
    : null;

  const lk = member.lk
    ? <a className="social" href={member.lk} target="_blank">
      <i className="fa fa-linkedin-square"></i>
    </a>
    : null;

  const gh = member.gh
    ? <a className="social" href={member.gh} target="_blank">
      <i className="fa fa-github-square"></i>
    </a>
    : null;

  const mail = member.mail
    ? <a className="social" href={`mailto:${member.mail}`} target="_blank">
      <i className="fa fa-envelope"></i>
    </a>
    : null;

  return (
    <div className="member-card" style={{ "backgroundImage": `url(${member.image})` }}>
      <div className="member-card__overlay"></div>
      <div className="member-card__content">
        <div className="member-card__header">
          <a href={`#${type}${key}`}>
            <h1 className="member-card__title">{member.name}</h1>
          </a>
          <h4 className="member-card__info">{title}</h4>
        </div>
        <div>
          {mail}
          {fb}
          {tw}
          {lk}
          {gh}
        </div>
      </div>
    </div>
  )
}

function renderPopup(member, key, type) {
  return (
    <div id={`${type}${key}`} className="overlay">
      <div className="popup">
        <h2>{member.name}</h2>
        <a className="close" href="#">&times;</a>
        <div className="content">
          {member.description}
        </div>
      </div>
    </div>
  )
}

const ALL_MEMBERS = [
  {
    type: "Advisors",
    members: [
      {
        "name": "Cothan",
        "description": "Duc (Cothan) Nguyen is a graduate research assistant in hardware implementation of Post-Quantum Cryptography in FPGA. His research interest includes designing Post-Quantum Cryptography hardware architecture, applying deep learning to binary analysis, and NEON implementation of multiple PQC candidates. Before his Ph.D., he participated in many CTF competitions and won several national and international prizes, his tasks were to implement relevant cryptographic attack papers during competitions. Also, he is the founder of Efiens CTF team, Efiens has become top student CTF team in Vietnam.",
        "image": "https://blog.efiens.com/author/cothan/avatar_hu27f7dc34c9db8fd2b063f3fba6be9864_246027_270x270_fill_lanczos_center_2.png",
        "mail": "cothannguyen@gmail.com",
        "fb": "",
        "tw": "https://twitter.com/c0th4n",
        "lk": "",
        "gh": "https://github.com/cothan"

      }
    ]
  }
]

function Member() {
  return (
    <div>
      {
        ALL_MEMBERS.map(({ type, members }) => {
          return (
            <div>
              <h3>{type}</h3>
              <div className="member">
                {
                  members.map((member, key) => renderMember(member, key, type))
                }
              </div>
            </div>
          )
        })
      }
      {
        ALL_MEMBERS.map(({ type, members }) => {
          return members.map((member, key) => renderPopup(member, key, type))
        })
      }
    </div>
  )
}

export default Member;

