import React from "react";
import { Routes, Route } from "react-router-dom";
import { RouteItems } from "./RouteItems";

const AppRoutes = () => {
  return (
    <Routes>
      {RouteItems.map(({ path, component }, key) => (
        <Route exact path={path} element={component} key={key} />
      ))}
    </Routes>
  );
};

export default AppRoutes;
