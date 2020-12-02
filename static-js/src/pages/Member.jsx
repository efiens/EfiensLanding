import React from "react";

function About() {
  return (
    <div>
      <div className="activity">
        <h3>Who We Are</h3>
        <p>EFIENS is a cyber security club comprised primarily of students and alumni from <a href="" target="_blank">Ho Chi Minh City University of Technology (HCMUT)</a>. We were founded to provide resources and study envinronment to those interested in exploring the world of cyber security.</p>
        <p>At our core, we are a group of self-taught security enthusiasts who enjoy sharing our knowledge with those interested in learning. We believe in the freedom of information, and do our best to prepare resources, organize meetings, and host educational events on our own time. See our current officers at <a href="./member">Member</a>.</p>
      </div>
      <div className="activity">
        <h3>What We Do</h3>
        <h4>Weekly Meetings</h4>
        <p>On a weekly basis, the club hosts interactive educational presentations covering a wide variety of technical subjects related to the field of computer security. These presentations are open to anyone and include topics such as binary exploitation, assembly level reverse engineering, malware analysis, web security, cryptography, network security, and digital forensics.</p>

        <p>These meetings are held privately in EFIENS Lab, located in Ly Thuong Kiet Campus of HCMUT.</p>
      </div>
    </div>
  )
}

export default About;

