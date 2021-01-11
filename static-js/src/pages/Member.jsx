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
    ],
  },
  {
    type: "Core member",
    members: [
      {
        "name": "_.npn._",
        "description": "",
        "image": "https://blog.efiens.com/author/_.npn._/avatar_hu88c2d2838aa1227721a387fd7ff65b37_110775_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "https://www.facebook.com/phunghiaa/",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "DoubleVKay",
        "description": "Noob ...",
        "image": "https://blog.efiens.com/author/doublevkay/avatar_hu086d90e77a06ce125e87e48ca42743ae_64025_270x270_fill_q75_lanczos_center.jpg",
        "mail": "doublevkay@gmail.com",
        "fb": "",
        "tw": "https://twitter.com/ViKhangVo",
        "lk": "",
        "gh": "https://github.com/vovikhangcdv"
      },
      {
        "name": "ks75vl",
        "description": "",
        "image": "https://blog.efiens.com/author/ks75vl/avatar_hu52a603635ecebd45650b162dadabb4e5_12861_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "Midas",
        "description": "",
        "image": "https://blog.efiens.com/author/midas/avatar_hu86dc87257b111beec3c3771926c72116_2234_270x270_fill_lanczos_center_2.png",
        "mail": "dang.le.hcmut@hcmut.edu.vn",
        "fb": "",
        "tw": "https://twitter.com/_lkmidas",
        "lk": "",
        "gh": "https://github.com/lkmidas"
      },
      {
        "name": "MN",
        "description": "",
        "image": "https://blog.efiens.com/author/mn/avatar_hu250db427cd61990b9e49bd02614d4606_228188_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "https://www.facebook.com/ngoc.dang499/",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "ngoctin",
        "description": "Tin is a security engineer, also a backend developer at Verichains. He has participated in many security contests as a member of Efiens team in HCMUT. He has strongly knowledge of securing system, pentesting web applications. He got some prizes in National Security Contests.",
        "image": "https://blog.efiens.com/author/ngoctin/avatar_hu07eed9f46dcc83413f04ee5e33fd19b3_7515_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "https://www.facebook.com/ngoctin.tran.921/",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "PCBack",
        "description": "",
        "image": "https://blog.efiens.com/author/pcback/avatar_hue6101fec82e002a4cb5b1cc43d45bafe_5040_270x270_fill_q75_lanczos_center.jpg",
        "mail": "bach.pham_bk@hcmut.edu.vn",
        "fb": "",
        "tw": "https://twitter.com/pcback_",
        "lk": "",
        "gh": "https://github.com/pcback"
      },
      {
        "name": "Pickaxe",
        "description": "",
        "image": "https://blog.efiens.com/author/pickaxe/avatar_hu52a603635ecebd45650b162dadabb4e5_12861_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/minhbq-99"
      },
      {
        "name": "zoli4c",
        "description": "VQG = Vuon Quoc Gia",
        "image": "https://blog.efiens.com/author/zoli4c/avatar_hu27f7dc34c9db8fd2b063f3fba6be9864_77347_270x270_fill_q75_lanczos_center.jpg",
        "mail": "giangdeokinh@gmail.com",
        "fb": "",
        "tw": "https://twitter.com/giangvq1",
        "lk": "",
        "gh": "https://github.com/zoli4c"
      },
    ],
  },
  {
    type: "Member",
    members: [
      {
        "name": "Catafact",
        "description": "",
        "image": "https://blog.efiens.com/author/catafact/avatar_hu178ea802a6578dea74a6c0e06292144e_81762_270x270_fill_q75_lanczos_center.jpg",
        "mail": "long.lang.bkhcm@hcmut.edu.vn",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/longchampion"
      },
      {
        "name": "catperson",
        "description": "",
        "image": "https://blog.efiens.com/author/catperson/avatar_huc50a08fc24b95c9213fdb3cf3a699209_79065_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "https://www.facebook.com/profile.php?id=100023973317344",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "Edisc",
        "description": "Interested in Malware Analysis",
        "image": "https://blog.efiens.com/author/edisc/avatar_hubbdbd969e9d9ff115cf25ba0387ced29_6107947_270x270_fill_q75_lanczos_center.jpg",
        "mail": "edisc.hacker@gmail.com",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/minhlongmt183"
      },
      {
        "name": "Frost",
        "description": "",
        "image": "https://blog.efiens.com/author/frost/avatar_hu8b1eb5b18aa7a29b62bac2eff00a0362_178938_270x270_fill_lanczos_center_2.PNG",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "JstD",
        "description": "",
        "image": "https://blog.efiens.com/author/jstd/avatar_hub9791b2adff9bec70be270818a357a2a_23743_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "https://www.facebook.com/tvd2000/",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "lifebow",
        "description": "",
        "image": "https://blog.efiens.com/author/lifebow/avatar_hu3453e481dab6f00a3ec22ff943502b4c_63613_270x270_fill_q75_lanczos_center.jpg",
        "mail": "lifebowisme@gmail.com",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/lifebow"
      },
      {
        "name": "Lunaa",
        "description": "",
        "image": "https://blog.efiens.com/author/lunaa/avatar_hu383f55a39b31ce65727d778fe62ec5f2_7754_270x270_fill_lanczos_center_2.PNG",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "redandblue",
        "description": "Interested in Cracking technique",
        "image": "https://blog.efiens.com/author/redandblue/avatar_hud0583024d19cd37f79b9b43dfad7e6db_124303_270x270_fill_lanczos_center_2.png",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/khoavnpsc"
      },
      {
        "name": "Retis",
        "description": "",
        "image": "https://blog.efiens.com/author/retis/avatar_hueb09f622e03885f0846da938f715a84e_7446_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
    ],
  },
  {
    type: "Alumni",
    menbers: [
      {
        "name": "kynguyenngoc",
        "description": "Ky is a second-year Master student in the MPRI (Master Parisien de Recherche en Informatique) program, enrolled at the Ecole Normale Supérieure (ENS) Paris. Previously, Ky entered ENS from Licence 3 to complete the Bachelor’s degree in an inter-university program with University Paris Diderot. Before ENS, he was an HCMUT alumnus at CSE faculty and joined Efiens in 2016. Despite not being in active in CTFs anymore, Ky still participates in either crypto- related discussions or chit - chats with the current members of Efiens.",
        "image": "https://blog.efiens.com/author/kynguyenngoc/avatar_hu4d5fed3b4398281401df18c9a6e173f1_8688_270x270_fill_q75_lanczos_center.jpg",
        "mail": "ky.nguyen@ens.psl.eu",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "Lampard",
        "description": "Thanh (Lampard) joined Efiens in 2017 and currently is a PhD student at Ho Chi Minh city University of Technology and also working as an Applied Cryptography Researcher at Incognito Chain. His main foci include Blockchain protocols, Blockchain-based applications' security, Zero-knowledge proofs, Decentralized random number generation. Before his PhD, he had achieved many international and nation prizes in cryptography and mathematics - 1st prize at the National Olympics in Algebra(2018), 2nd prize at the International Olympiad in Cryptograpy(2019) to name a few.",
        "image": "https://blog.efiens.com/author/lampard/avatar_hu2e5c62dd53fbb3f45e947042f4403a0f_8829_270x270_fill_q75_lanczos_center.jpg",
        "mail": "nvthanh.sdh19@hcmut.edu.vn",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/LampardNguyen234"
      },
    ],
  },
  {
    type: "Fresher",
    menbers: [
      {
        "name": "AloneFancy",
        "description": "Am I Don Quixote?",
        "image": "https://blog.efiens.com/author/alonefancy/avatar_hu2c86b36c7ea43cfcd8b8ee199e64e763_7191_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "bmkiet",
        "description": "",
        "image": "https://blog.efiens.com/author/bmkiet/avatar_huc25c320bf5fc199c87c978e758560579_116263_270x270_fill_lanczos_center_2.png",
        "mail": "kiet.buibui@hcmut.edu.vn",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/mkbui"
      },
      {
        "name": "Nguyenngungok",
        "description": "A noob CTF player ... and love cat ? Interested in Web security and Cracking technique",
        "image": "https://blog.efiens.com/author/nguyenngungok/avatar_hu2e9c83bfe55a82599e8546335079cad7_220685_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": ""
      },
      {
        "name": "SeaDawn",
        "description": "",
        "image": "https://blog.efiens.com/author/seadawn/avatar_hubf19224fd6f869d275ac0c4f2eede4ce_5983_270x270_fill_q75_lanczos_center.jpg",
        "mail": "",
        "fb": "",
        "tw": "",
        "lk": "",
        "gh": "https://github.com/longnguyenhuynh"
      },
    ],
  },
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

