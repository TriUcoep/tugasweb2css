        function coba() {
			if ((document.getElementById('Input Email').value == "admin@gmail.com")&&(document.getElementById('Password').value == "admin123")) {
				swal({
					title: "Selamat Anda Berhasi Login",
					text: "Lanjuttkan",
					icon: "Sukses",
					button: "Lanjut"
				}).then(function() {
					window.location.href = "index.php";
				});
				return true;
			}
			else{
				swal("Login Gagal!", "Email atau Password salah!", "error").then(function() {
					window.location.href = "index.php";
				});
			}
		}