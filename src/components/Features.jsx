import React from 'react';

const Features = () => {
    const features = [
        ['Kurikulum Terstruktur', 'Dari dasar hingga coding.'],
        ['Belajar Praktik', 'Bukan sekadar teori.'],
        ['Manual Lengkap', 'Panduan PDF mudah dipahami.'],
        ['Support Langsung', 'Bantuan via WhatsApp.']
    ];

    return (
        <section className="bg-dark py-5">
            <div className="container text-center">
                <h2 className="fw-bold mb-5 text-white">Keunggulan</h2>
                <div className="row g-4">
                    {features.map((feature, index) => (
                        <div className="col-6 col-md-3" key={index}>
                            <div className="glass p-3 h-100">
                                <h6 className="text-white fw-bold">{feature[0]}</h6>
                                <p className="text-secondary small mb-0">{feature[1]}</p>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
};

export default Features;
