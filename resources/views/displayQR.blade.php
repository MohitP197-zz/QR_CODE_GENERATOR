<div class="row">
    <div class="column">
        <?php  
        $inputField = $_POST['qrText'];
        
        ?>
        {!! QrCode::size(250)->generate("$inputField"); !!}

    </div>
</div> 