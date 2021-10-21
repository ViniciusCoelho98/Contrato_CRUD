<h1>Index</h1>

<button onclick="location.href='<?php echo base_url('/create'); ?>'">Create</button>

<table border="1px solid">
  <thead>
    <tr>
      <th>Id</th>
      <th>Empresa</th>
      <th>CNPJ</th>
      <th>Data inicio</th>
      <th>Data fim</th>
      <th>Descrição</th>
      <th>&nbsp</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empresas as $empresa) : ?>
      <tr>
        <td><?= $empresa['id'] ?></td>
        <td><?= $empresa['empresa'] ?></td>
        <td><?= $empresa['cnpj'] ?></td>
        <td><?= $empresa['dataInicio'] ?></td>
        <td><?= $empresa['dataFim'] ?></td>
        <td><?= $empresa['descricao'] ?></td>
        <td><?= $empresa['id'] ?> | <?= $empresa['id'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>