<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // ini function untuk menampilkan data yg telah diisi
public function index(){
    $student = Student::all();
    return view('home',compact(['student']));

}
// input data
public function input(){
    return view('add');
}
// progress dari input data
public function store(Request $request){

    // dd($request->all());
     $student = Student::create($request->all());
     return redirect('home');
}
// edit section
public function edit($id){
    $student = Student::find($id);
    return view('update.edit',compact(['student']));

}
public function update($id, Request $request){
    $student = Student::find($id);
    $student->update($request->all());
    return redirect('home');
}
public function destroy($id){
    $student = Student::find($id);
    $student->delete();
    return redirect('home');
}
}
// penjelasan lebih detail nya

// 1. **index()**: Metode ini digunakan untuk menampilkan daftar data siswa. Pertama, ia mengambil semua data siswa menggunakan `Student::all()`, kemudian memasukkannya ke dalam variabel `$student`. Setelah itu, metode mengembalikan tampilan dengan memasukkan data siswa ke dalam view `home` menggunakan `compact(['student'])`.

// 2. **create()**: Metode ini digunakan untuk menampilkan halaman form untuk menambahkan data siswa baru. Hanya mengembalikan tampilan dengan view `about`.

// 3. **store(Request $request)**: Metode ini digunakan untuk menyimpan data siswa baru yang dimasukkan melalui form. Pertama, ia menciptakan objek `$student` menggunakan `Student::create($request->all())`, di mana `$request->all()` berisi semua data yang dikirimkan melalui form. Kemudian, ia mengembalikan pengalihan (redirect) ke route `home`.

// 4. **edit($id)**: Metode ini digunakan untuk menampilkan halaman form untuk mengedit data siswa yang sudah ada. Pertama, ia menemukan data siswa berdasarkan `$id` yang diterima, kemudian memasukkannya ke dalam variabel `$student`. Akhirnya, mengembalikan tampilan dengan view `update.edit` dan mengirimkan data siswa ke view tersebut menggunakan `compact(['student'])`.

// 5. **update($id, Request $request)**: Metode ini digunakan untuk menyimpan perubahan pada data siswa setelah diedit. Pertama, ia menemukan data siswa berdasarkan `$id` yang diterima. Kemudian, menggunakan `$student->update($request->all())` untuk mengupdate atribut-atribut data siswa berdasarkan data yang dikirimkan melalui form. Terakhir, mengembalikan pengalihan (redirect) ke route `home`.

// 6. **destroy($id)**: Metode ini digunakan untuk menghapus data siswa berdasarkan `$id` yang diberikan. Pertama, ia mencari data siswa berdasarkan `$id`. Jika data siswa ditemukan, maka akan dihapus dengan `delete()`. Mengembalikan pengalihan (redirect) ke route `home`.

// apa guna compact 

// Pada metode index() dalam StudentController, compact(['student']) digunakan untuk mengemas data siswa yang akan ditampilkan di view home.

// Fungsi compact() sendiri adalah untuk membuat array asosiatif dari variabel yang diberikan, dengan nama variabel sebagai kunci dan nilai variabel sebagai nilai. Dalam hal ini, compact(['student']) mengambil variabel $student yang berisi data siswa, dan mengemasnya menjadi array asosiatif dengan kunci 'student' dan nilai dari variabel $student.

// Kemudian, array asosiatif ini akan digunakan di view home untuk menampilkan data siswa. Dengan menggunakan compact, pengiriman data ke view menjadi lebih mudah dan ringkas, karena tidak perlu menuliskan variabel satu per satu.

