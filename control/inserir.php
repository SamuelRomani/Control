<?php 
include 'header.html';
?>
<body>
  <div class="container">
    <h4>Registrar funcionário</h4>
    <div class="row register-form">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nome *" value="" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Sobrenome *" value="" />
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email *" value="" />
        </div>
        <div class="form-group">
          <input type="date" class="form-control"  placeholder="Data de nascimento *" value="" />
        </div>
        <div class="form-group">
          <div class="maxl">
            <label class="radio inline"> 
              <input type="radio" name="gender" value="masculino" checked>
              <span> Masculino </span> 
            </label>
            <label class="radio inline"> 
              <input type="radio" name="gender" value="feminino">
                <span> Feminino </span> 
            </label>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Salário *" value="" />
        </div>
        <div class="form-group">
          <input type="text" minlength="10" maxlength="10" name="telefone" class="form-control" placeholder="Telefone *" value="" />
        </div>
        <div class="form-group">
          <select class="form-control">
            <option class="hidden"  selected disabled>Cargo</option>
            <option>Analista</option>
            <option>Designer</option>
            <option>Programador</option>
            <option>Roteirista</option>
            <option>Sonoplasta</option>
          </select>
        </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Observações *" value="" />
          </div>
            <input type="submit" class="btn btn-primary" value="Registrar"/>
        </div>
       </div>
    </div>  
  </div>                          
</body>