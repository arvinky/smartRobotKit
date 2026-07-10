import React from 'react';

const Navbar = () => {
    return (
        <nav className="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
            <div className="container-fluid px-4 px-lg-5">
                <a className="navbar-brand fw-bold" href="#">Smart Robot Kit</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul className="navbar-nav">
                        <li className="nav-item"><a href="#about" className="nav-link text-white mx-2 mx-lg-3">Tentang</a></li>
                        <li className="nav-item"><a href="#layanan" className="nav-link text-white mx-2 mx-lg-3">Layanan</a></li>
                        <li className="nav-item"><a href="#produk" className="nav-link text-white mx-2 mx-lg-3">Produk</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;
