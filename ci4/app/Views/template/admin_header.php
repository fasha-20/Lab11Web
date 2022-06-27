<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div id="container">
    <header>
      <h1>Portal Berita Artikel</h1>
    </header>
    <nav>
      <a href="<?= base_url('admin/artikel'); ?>" class="active">Dashboard</a>
      <a href="<?= base_url('/artikel'); ?>">Artikel</a>
      <a href="<?= base_url('admin/artikel/add'); ?>">Tambah Artikel</a>
      <a href="<?= base_url('/user/logout'); ?>">Logout</a>

    </nav>