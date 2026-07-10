import React from 'react';

const Services = () => {
    return (
        <section id="layanan" className="bg-dark py-5">
            <div className="container text-center">
                <h2 className="fw-bold mb-5 text-white">Layanan</h2>
                <div className="row g-4">
                    <div className="col-md-4">
                        <div className="glass p-4 h-100">
                            <h5 className="mb-3 text-white">Paket Pembelajaran</h5>
                            <p className="text-secondary">Setiap produk terdiri dari komponen robot, dan panduan penggunaan.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="glass p-4 h-100">
                            <h5 className="mb-3 text-white">Manual Book</h5>
                            <p className="text-secondary">Panduan PDF berisi langkah pembelajaran dari pengenalan hingga implementasi.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="glass p-4 h-100">
                            <h5 className="mb-3 text-white">Dukungan Pengguna</h5>
                            <p className="text-secondary">Layanan bantuan WhatsApp untuk konsultasi teknis dan pendampingan.</p>
                        </div>
                    </div>
                </div>

                <div className="mt-5">
                    <h4 className="mb-4 text-white">Proses Pembelian</h4>
                    <div className="row g-3 justify-content-center">
                        <div className="col-sm-6 col-md-4">
                            <div className="glass p-3"><p className="text-secondary mb-0">1. Pilih jenis robot & level.</p></div>
                        </div>
                        <div className="col-sm-6 col-md-4">
                            <div className="glass p-3"><p className="text-secondary mb-0">2. Konfirmasi via WhatsApp.</p></div>
                        </div>
                        <div className="col-sm-6 col-md-4">
                            <div className="glass p-3"><p className="text-secondary mb-0">3. Bayar & Produk dikirim.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
};

export default Services;
