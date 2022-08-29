import React from "react";
import { Helmet } from "react-helmet";
const TITLE = "Home";

const Home = () => {
  return (
    <>
      <Helmet>{TITLE}</Helmet>
      Home
    </>
  );
};

export default Home;
