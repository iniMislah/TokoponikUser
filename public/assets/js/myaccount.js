// URL API untuk menambahkan alamat baru
const apiUrl = "https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/auth/addresses/store"; // URL API POST

// Menangani form submit untuk menambahkan alamat baru
document.getElementById('address-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Ambil data dari form
    const newAddress = {
        receiver_name: document.getElementById('billingFirstName').value + " " + document.getElementById('billingLastName').value, // Nama lengkap
        address: document.getElementById('billingStreet').value, // Alamat jalan
        district: document.getElementById('billingCity').value, // Kota
        subdistrict: document.getElementById('billingSubdistrict').value, // Kecamatan
        province: document.getElementById('billingProvince').value, // Provinsi
        post_code: document.getElementById('billingZip').value, // Kode pos
        note: document.getElementById('billingNote').value, // Note (optional)
    };


    // Kirim POST request untuk menambahkan alamat
    fetch(apiUrl, {
        method: 'POST',  // Menggunakan POST untuk menambahkan data baru
        headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}` // Ganti dengan token autentikasi jika diperlukan
        },
        body: JSON.stringify(newAddress) // Mengirimkan data alamat baru
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 201) {
            alert('Address added successfully');
        } else {
            alert('Failed to add address');
        }
    })
    .catch(error => {
        console.error("Error adding address:", error);
        alert('Error adding address');
    });
});

