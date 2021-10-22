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
    <?php foreach ($contratos as $contrato) : ?>
      <tr>
        <td><?= $contrato['id'] ?></td>
        <td><?= $contrato['empresa'] ?></td>
        <td><?= $contrato['cnpj'] ?></td>
        <td><?= date('d-m-Y', strtotime($contrato['dataInicio']))  ?></td>
        <td><?= date('d-m-Y', strtotime($contrato['dataFim'])) ?></td>
        <td><?= $contrato['descricao'] ?></td>
        <td><a href="<?= base_url('/contrato/edit/' . $contrato['id']); ?>">Edit</a> | <a href="<?= base_url('/contrato/delete/' . $contrato['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>