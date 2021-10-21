<h1>Create</h1>

<button onclick="location.href='<?php echo base_url('/'); ?>'">Index</button>

<?= \Config\Services::validation()->listErrors() ?>

<form action="/create" method="post">
  <?= csrf_field() ?>

  <label>Empresa</label>
  <input type="input" name="empresa" /><br />

  <label>CNPJ</label>
  <input type="input" name="cnpj" /><br />

  <label>Data inicio</label>
  <input type="date" name="dataInicio" /><br />

  <label>Data fim</label>
  <input type="date" name="dataFim" /><br />

  <label>Descrição</label>
  <textarea name="descricao" cols="30" rows="10"></textarea>

  <input type="submit" name="submit" value="Create" />
</form>