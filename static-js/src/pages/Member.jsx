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
      },
      {
        "name": "B40",
        "description": "Bao (B40) is a security researcher at VNG Corp. With 3+ years diving in Blockchain field, he took part in developing several blockchain- applied projects and had a blockchain - security - related talk at Hack In The Box conference. As a passionate member of Efiens team, he also enjoys bug finding and conducts solutions for binary obfuscation at compiler and source code level.",
        "image": "https://blog.efiens.com/author/b40/avatar_hu614d2057fa5ab10893163c29677ee02d_70760_270x270_fill_q75_lanczos_center.jpg",
        "mail": "quocbao300@gmail.com",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "Luibo",
        "description": "Khoa (Luibo) is a security researcher originated from the Efiens security club. He attended many security contests and now working as a research student at CYLABK. He is experienced in reversing malware and developing Windows kernel driver. He is currently looking for research opportunity in fields of binary analysis, formal methods and compiler design and security. Before that, he received B.Eng. Degree in Computer Science, University of Technology, VNU-HCM.",
        "image": "https://blog.efiens.com/author/luibo/avatar_huae376cfaded76f219a19d043c2b15c4d_60290_270x270_fill_q75_lanczos_center.jpg",
        "mail": "ctf.luibo@gmail.com",
        "fb": "",
        "tw": "https://twitter.com/luibo_efiens",
        "lk": "",
        "gh": "https://github.com/nganhkhoa"
      },
      {
        "name": "Nguyễn An Khương",
        "description": "Dr. Nguyen An Khuong is a lecturer and researcher at the Faculty of Computer Science and Engineering, Ho Chi Minh City University of Technology (HCMUT). He receives his PhD in Mathematics from the University of Groningen, The Netherlands in 2008. Among of his current interests are applied cryptography, blockchain technology, and applied machine learning. In terms of services, he is a member of the editorial board of the Bulletin of Vietnamese Mathematical Society (2012-2018), and contributed to the Vietnamese editions of “Modern Industrial Statistics: with applications in R, MINITAB and JMP” by R. Kenett, S. Zacks and “Elements” by Euclid of Alexandria as a co-translator. He is also a mentor and supervisor for the Efiens team. His research profile is available at https://www.researchgate.net/profile/Khuong_Nguyen-An",
        "image": "https://blog.efiens.com/author/nguyen-an-khuong/avatar_huf7147026341f8ad4aa1f2f845b95b8df_38998_270x270_fill_q75_lanczos_center.jpg",
        "mail": "nakhuong@hcmut.edu.vn",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
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

