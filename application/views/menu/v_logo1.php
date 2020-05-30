<?php
if ($this->session->userdata('s_id_area') == 1) {
    $v_imagen = 'trabajar-desde-casa.png';
}elseif($this->session->userdata('s_id_area') == 2){
    $v_imagen = 'soporte-tecnico.png';
}elseif($this->session->userdata('s_id_area') == 3){
    $v_imagen = 'comercio-y-compras.png';
}elseif($this->session->userdata('s_id_area') == 4){
    $v_imagen = 'soporte-tecnico.png';
}
?>
<div class="centro">
    <picture>
        <img alt="Inicio" sizes="30vw" srcset="<?php echo base_url() ?>assets/img/<?php echo $v_imagen ?> 640w">
    </picture>
</div>