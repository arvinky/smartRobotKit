import React, { useEffect } from 'react';
import './css/app.css';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import About from './components/About';
import Services from './components/Services';
import Products from './components/Products';
import Features from './components/Features';
import Footer from './components/Footer';

const App = () => {
    useEffect(() => {
        // Initialize AOS if available globally (from script tag)
        if (window.AOS) {
            window.AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }

        // Navbar scroll effect
        const handleScroll = () => {
            const nav = document.querySelector('.navbar');
            if (nav) {
                if (window.scrollY > 50) {
                    nav.style.padding = '10px 0';
                    nav.style.background = 'rgba(15, 23, 42, 0.95) !important';
                } else {
                    nav.style.padding = '15px 0';
                    nav.style.background = 'rgba(15, 23, 42, 0.8) !important';
                }
            }
        };

        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    return (
        <>
            <Navbar />
            <Hero />
            <About />
            <Services />
            <Products />
            <Features />
            <Footer />
        </>
    );
};

export default App;
