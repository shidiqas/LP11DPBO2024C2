<?php


interface KontrakPresenter
{
	public function prosesDataPasien();
	public function tambahDataPasien();
	public function ubahDataPasien();
	public function hapusDataPasien();
	public function getId($i);
	public function getNik($i);
	public function getNama($i);
	public function getTempat($i);
	public function getTl($i);
	public function getGender($i);
	public function getEmail($i);
	public function getTelp($i);
	public function getSize();
}
