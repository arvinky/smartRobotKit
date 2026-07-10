import React from 'react';

const Hero = () => {
    return (
        <section className="hero text-center py-5 mt-5">
            <div className="container py-lg-5">
                <h1 className="shimmer-text display-4 fw-bold">
                    Pembelajaran Robotika Terstruktur untuk Generasi Masa Depan
                </h1>
                <p className="mt-4 col-md-8 mx-auto text-light lead">
                    Smart Robot Kit dirancang sebagai media pembelajaran berbasis praktik yang membantu siswa memahami 
                    konsep robotika secara bertahap.
                </p>
                <a href="#produk" className="btn btn-premium mt-4 px-5 py-3">Lihat Produk</a>
            </div>
        </section>
    );
};

export default Hero;
