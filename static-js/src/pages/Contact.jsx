import React from "react";

import "../css/contact.css";

import facebook from "../img/logo/facebook_rbg@2x.png";
import discord from "../img/logo/discord_rbg@2x.png";
import twitter from "../img/logo/twitter_rbg@2x.png";

function Contact() {
  document.title = "Contact - Efiens"
  return (
    <div className="row">
        <div className="col-sm-9">
            <iframe className="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.504638855704!2d106.65550931432688!3d10.772608262211007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec17709146b%3A0x54a1658a0639d341!2zxJDhuqFpIEjhu41jIELDoWNoIEtob2E!5e0!3m2!1svi!2s!4v1584842640601!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style={{"border": 0}} allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div className="col-sm-3">
            <div id="stage" className="stage">
                <form action="/">
                    <fieldset>
                        <legend>Contact us.</legend>
                        <div className="control">
                            <input
                                type="text"
                                id="name"
                                placeholder="What should we call you?"
                                required=""
                            /><label>Name</label>
                        </div>
                        <div className="control">
                            <input
                                type="email"
                                id="email"
                                placeholder="Where can we reach you?"
                                required=""
                            /><label>E-mail</label>
                        </div>
                        <div className="control">
                            <textarea
                                id="ba"
                                placeholder="What's on your mind?"
                                required=""
                            ></textarea
                            ><label>Message</label>
                        </div>
                        <a href="mailto:efiens.team@gmail.com,support@efiens.com,efiens@hcmut.edu.vn?subject=Feedback&body=Hello%20Efiens" type="submit">
                            SEND
                        </a>
                    </fieldset>
                    <hr style={{"border-color": "#2980b9"}}/>
                    <legend>Other channels</legend>
                    <p>Address: Room 304 Block B9, HCMUT Ly Thuong Kiet Campus</p>
                    <a href="mailto:efiens.team@gmail.com?Subject=[Hello Efiens]" target="_top">efiens.team@gmail.com</a>
                    <br/>
                    <a href="mailto:efiens@hcmut.edu.vn?Subject=[Hello Efiens]" target="_top">efiens@hcmut.edu.vn</a>
                    <br/><br/>
                    <a className="social" href="https://www.facebook.com/efiens.team" target="_blank">
                        <img className="social__icon" src={facebook} alt="fb" />
                    </a>
                    <a className="social" href="https://twitter.com/efiens.team" target="_blank">
                        <img className="social__icon" src={twitter} alt="twitter" />
                    </a>
                    <a className="social" href="https://discord.gg/ZzkVUKK" target="_blank">
                        <img className="social__icon" src={discord} alt="discord" />
                    </a>
                </form>
            </div>
        </div>
    </div>
  )
}

export default Contact;
