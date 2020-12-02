import React from "react";

import {
  Switch,
  Route,
  Redirect,
  NavLink,
  useLocation,
} from "react-router-dom";

import "./css/bootstrap.min.css";
import "./css/swiper.min.css";
import "./css/main.css";

import VNSEC from "./img/sponsor_vnsec.png";
import VNG from "./img/sponsor_vng.png";
import gmail from "./img/logo/gmail_gray@2x.png";
import facebook from "./img/logo/facebook_gray@2x.png";
import discord from "./img/logo/discord_gray@2x.png";
import twitter from "./img/logo/twitter_gray@2x.png";
import HCMUT from "./img/logo-hcmut.svg";
import { ReactComponent as EFIENS } from "./img/EFIENS-10-07.svg";

import Home from "./pages/Home.jsx";
import About from "./pages/About.jsx";
import Contact from "./pages/Contact.jsx";
import Member from "./pages/Member.jsx";
import Achievement from "./pages/Achievement.jsx";

function App() {
  let location = useLocation()
  // console.log(location)
  return (
    <div className="App">
    <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
      <div className="container-xl">
        <a className="navbar-brand header" href="/">
          {
            location.pathname === "/"
            ? "EFIENS"
            : <EFIENS style={{"height": "4rem"}} alt="Efiens" />
          }
        </a>

        <button className="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false"
          aria-label="Toggle navigation">
          <span className="navbar-toggler-icon"></span>
        </button>

        <div className="navbar-collapse collapse" id="navbarsExample07XL">
            <ul className="navbar-nav ml-auto">
                <li className="nav-item">
                    <NavLink className="nav-link" to="/about" activeClassName="active">About</NavLink>
                </li>
                <li className="nav-item">
                    <NavLink className="nav-link" to="/member" activeClassName="active">Member</NavLink>
                </li>
                <li className="nav-item">
                    <NavLink className="nav-link" to="/achievement" activeClassName="active">Achievement</NavLink>
                </li>
                <li className="nav-item">
                    <a className="nav-link" href="https://blog.efiens.com">
                      Blog <i className="fa fa-external-link"></i>
                    </a>
                </li>
                <li className="nav-item">
                    <NavLink className="nav-link" to="/contact" activeClassName="active">Contact</NavLink>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <div className="text-center center text-header" style={{"flexDirection": "column"}}>
      {
        location.pathname === "/"
        ? <EFIENS style={{"height": "70%"}} alt="Efiens" />
        : <p className="header">{location.pathname.substring(1)}</p>
      }
    </div>

    <Switch>
      <Route path="/about">
        <div className="container-xl container-cus" style={{"padding": "3rem 0"}}>
          <About />
        </div>
      </Route>

      <Route path="/member">
        <div className="container-xl container-cus" style={{"padding": "3rem 0"}}>
          <Member />
        </div>
      </Route>

      <Route path="/achievement">
        <div className="container-xl container-cus" style={{"padding": "3rem 0"}}>
          <Achievement />
        </div>
      </Route>

      <Route path="/contact">
        <div className="container-xl container-cus" style={{"padding": "3rem 0"}}>
          <Contact />
        </div>
      </Route>

      <Route exact path="/">
        <>
          <div className="container-xl container-cus" style={{"padding": "3rem 0"}} />
          <Home />
        </>
      </Route>

      <Route render={() => <Redirect to={{pathname: "/"}} />} />
    </Switch>

    <footer className="footer">
        <div className="container">
            <div className="footer__content">
                <div className="logoOgr">
                    <div className="logoOgr__item">
                        <h4 className="logoOgr__title">Sponsors</h4>
                        <img className="sponsors__logo" src={VNSEC} alt="VNSEC" />
                        <img className="sponsors__logo" src={VNG} alt="VNG" />
                    </div>
                    <div className="logoOgr__item">
                        <h4 className="logoOgr__title">Part of</h4>
                        <img className="sponsors__logo" src={HCMUT} alt="HCMUT" />
                    </div>
                </div>
                <div className="footer__col__right">
                    <div style={{"display": "inline-flex", "paddingBottom": "1px"}}>
                        <a className="social" href="mailto:efiens.team@gmail.com,efiens@hcmut.edu.vn?Subject=[Hello Efiens]" target="_top">
                            <img className="footer__social__icon" src={gmail} alt="gmail"/>
                        </a>
                        <a className="social" href="https://www.facebook.com/efiens.team" target="_blank" rel="noreferrer">
                            <img className="footer__social__icon" src={facebook} alt="fb"/>
                        </a>
                        <a className="social" href="https://twitter.com/efiens.team" target="_blank" rel="noreferrer">
                            <img className="footer__social__icon" src={twitter} alt="twitter"/>
                        </a>
                        <a className="social" href="https://discord.gg/ZzkVUKK" target="_blank" rel="noreferrer">
                            <img className="footer__social__icon" src={discord} alt="discord"/>
                        </a>
                    </div>
                    <p style={{"margin": 0}}>© 2020 Efiens</p>
                </div>
            </div>

        </div>
    </footer>
    </div>
  );
}

export default App;
