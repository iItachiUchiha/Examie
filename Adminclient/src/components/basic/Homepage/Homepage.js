import React from "react";
import './homepage.css';
import './homepage.jpeg';
import { Navigate } from 'react-router-dom';
import { HomepageHeader } from "../header/header";
import Login from "../login/login";
import Auth from '../../../services/Auth';
import logoImg from './2070384.jpg';

function Homepage(){
  console.log("on home page");
  if(Auth.retriveToken() && Auth.retriveToken()!=='undefined'){
    return (<Navigate to='/home'/>);
  }
  else {
    return (
      <div>
          <div className="parallax">
            <HomepageHeader title='Examie' img={logoImg}/>
            <Login />
          </div>
      </div>
    );
  }
}

export default Homepage;
