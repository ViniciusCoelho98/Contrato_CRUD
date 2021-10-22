<?= csrf_field() ?>

<input type="hidden" name="id" value="<?= $contrato['id'] ?? "" ?>">

<label>Empresa</label>
<input type="input" name="empresa" value="<?= $contrato['empresa'] ?? "" ?>" /><br />

<label>CNPJ</label>
<input type="input" name="cnpj" id="cnpj" value="<?= $contrato['cnpj'] ?? "" ?>" /><br />

<label>Data inicio</label>
<input type="date" name="dataInicio" id="dataInicio" value="<?= $contrato['dataInicio'] ?? "" ?>" /><br />

<label>Data fim</label>
<input type="date" name="dataFim" id="dataFim" value="<?= $contrato['dataFim'] ?? "" ?>" /><br />

<label>Descrição</label>
<textarea name="descricao" cols="30" rows="10"><?= $contrato['descricao'] ?? "" ?></textarea>

<input type="submit" name="submit" value="<?= ($contrato['id'] ?? false) ? "Edit" : "Create" ?>" />