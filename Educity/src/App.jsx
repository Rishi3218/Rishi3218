import React, { useState } from 'react'
import Navbar from './components/navbar/navbar'
import Hero from './components/Hero/hero'
import Programs from './components/programs/programs.jsx'
import Title from './components/title/title.jsx'
import About from './components/About/about.jsx'
import Campus from './components/Campus/campus.jsx'
import Testimonials from './components/testimonials/testimonials.jsx'
import Contact from './components/contact/contact.jsx'
import Footer from './components/footer/footer.jsx'
import Videoplayer from './components/videoplayer/videoplayer.jsx'

const App = () => {

  const [playState, setPlayState] = useState(false);





  return (
    <div>
      <Navbar />
      <Hero />
      <div className="container">
      <Title subTitle='OUR PROGRAM' title='What We Offer' />
      <Programs />
      <About setPlayState={setPlayState}/>
      <Title subTitle='Gallery' title='Campus Photos' />
      <Campus />
      <Title subTitle='TESTIMONIALS' title='What Students Says' />
      <Testimonials />
      <Title subTitle='CONTACT US' title='Get in Touch' />
      <Contact />
      <Footer />
      </div>
      <Videoplayer playState={playState} setPlayState = {setPlayState} />
    </div>
  )
}

export default App