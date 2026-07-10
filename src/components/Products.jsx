import React from 'react';

const productsData = [
    {
        title: 'Line Follower',
        desc: 'Robot otomatis yang dirancang untuk mengikuti jalur garis hitam dengan presisi tinggi.',
        img: 'line.jpeg',
        levels: [
            ['PAUD/TK', 'Pengenalan Robot', 'line-paud.pdf', 'Rp 250.000'],
            ['SD', 'Kontrol & Pemahaman Komponen', 'line-sd.pdf', 'Rp 350.000'],
            ['SMP', 'Sistem, Perakitan & Pemrograman', 'line-smp.pdf', 'Rp 450.000']
        ]
    },
    {
        title: 'Manual Controller',
        desc: 'Memahami mekanika gerak dan transmisi daya melalui kendali smartphone.',
        img: 'manual.jpeg',
        levels: [
            ['PAUD/TK', 'Pengenalan Robot', 'manual-paud.pdf', 'Rp 200.000'],
            ['SD', 'Respon & Pemahaman Komponen', 'manual-sd.pdf', 'Rp 300.000'],
            ['SMP', 'Sistem, Perakitan & Pemrograman', 'manual-smp.pdf', 'Rp 400.000']
        ]
    },
    {
        title: 'Pendeteksi Warna',
        desc: 'Robot canggih yang mampu merespons objek berdasarkan input spektrum warna.',
        img: 'warna.jpeg',
        levels: [
            ['PAUD/TK', 'Pengenalan Robot', 'warna-paud.pdf', 'Rp 300.000'],
            ['SD', 'Respon & Pemahaman Komponen', 'warna-sd.pdf', 'Rp 400.000'],
            ['SMP', 'Sistem, Perakitan & Pemrograman', 'warna-smp.pdf', 'Rp 500.000']
        ]
    }
];

const Products = () => {
    return (
        <section id="produk" className="py-5">
            <div className="container">
                <h2 className="text-center mb-5 fw-bold">Katalog Produk</h2>

                {productsData.map((product, index) => (
                    <React.Fragment key={index}>
                        <div className="text-center mb-4 mt-5">
                            <div className="main-img-container">
                                <img src={`/images/${product.img}`} alt={product.title} className="main-product-img img-fluid" />
                            </div>
                            <h3 className="fw-bold">{product.title}</h3>
                            <p className="text-secondary col-md-8 mx-auto">{product.desc}</p>
                        </div>

                        <div className="row g-4 mb-5">
                            {product.levels.map((level, lvlIdx) => (
                                <div className="col-sm-6 col-md-4" key={lvlIdx}>
                                    <div className="product-card text-center">
                                        <div className="fw-bold text-white">Level {level[0]}</div>
                                        <div className="small text-secondary mb-2">{level[1]}</div>
                                        <div className="h5 text-info fw-bold">{level[3]}</div>
                                        <a href={`/manual/${level[2]}`} target="_blank" rel="noopener noreferrer" className="btn btn-outline-light w-100 mb-2 btn-sm">Manual Book</a>
                                        <a href={`https://wa.me/085725424846?text=Halo, saya tertarik ${product.title} Level ${level[0]}`} className="btn btn-premium w-100">Beli</a>
                                    </div>
                                </div>
                            ))}
                        </div>
                        {index !== productsData.length - 1 && <hr className="opacity-10" />}
                    </React.Fragment>
                ))}
            </div>
        </section>
    );
};

export default Products;
