import React from 'react';
import {
  BrowserRouter as Router,
  Routes,
  Route
  } from 'react-router-dom';

import { Home } from './pages/home';
import { Login } from './pages/login';
import { Feed } from './pages/feed';
import { About } from './pages/about';
import { Contact } from './pages/contact';
import { Libraries } from './pages/libraries';
import { NewUser } from './pages/newuser';
import { Header } from './components/Header';

function App() {
  return (
    <Router>
    <Header />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/libraries" element={<Libraries />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/login" element={<Login />} />
          <Route path="/feed" element={<Feed />} />
          <Route path="/newuser" element={<NewUser />} />
          <Route path="*" element={<Home />} />
        </Routes>
    </Router>
  );
}

export default App;
