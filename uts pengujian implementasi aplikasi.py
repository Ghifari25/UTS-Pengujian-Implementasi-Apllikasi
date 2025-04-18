class User:
    def __init__(self, email, password):
        self.email = email
        self.password = password

    def login(self):
        if self.email == "user@example.com" and self.password == "1234":
            return True
        return False

class Menu:
    def __init__(self, nama, harga):
        self.nama = nama
        self.harga = harga

class Pesanan:
    def __init__(self, menu, jumlah):
        self.menu = menu
        self.jumlah = jumlah

    def hitung_total(self):
        return self.menu.harga * self.jumlah

# Simulasi
user = User("user@example.com", "1234")
if user.login():
    menu = Menu("Nasi Goreng", 15000)
    pesanan = Pesanan(menu, 2)
    print("Total Harga:", pesanan.hitung_total())
else:
    print("Login gagal")
