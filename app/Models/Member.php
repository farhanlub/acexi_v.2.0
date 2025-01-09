<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    // Specify the table associated with the model
    protected $table = 'members'; // Change 'columns' to your table name

    // Define the fillable fields (you can adjust based on your actual requirements)
    protected $fillable = ['nama_lengkap', 'nama_lengkap_on', 'image', 'display', 'id_member', 'id_member_on', 'tanggal_lahir', 'tanggal_lahir_on', 'email', 'email_on', 'whatsapp', 'whatsapp_on', 'linkedin', 'linkedin_on', 'alamat', 'alamat_on', 'kota', 'kota_on', 'provinsi', 'provinsi_on', 'kode_pos', 'kode_pos_on', 'negara', 'negara_on', 'nama_perusahaan', 'nama_perusahaan_on', 'posisi_jabatan', 'posisi_jabatan_on', 'bidang_usaha', 'bidang_usaha_on', 'email_perusahaan', 'email_perusahaan_on', 'website_perusahaan', 'website_perusahaan_on', 'aktif_asosiasi_lain', 'aktif_asosiasi_on', 'nama_asosiasi', 'nama_asosiasi_on', 'created_at', 'updated_at'];
}
