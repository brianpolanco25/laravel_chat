<div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" wire:model="name">
    </div>

    <div class="form-group">
        <label for="name">Message</label>
        <input type="text" class="form-control" id="name" wire:model="message">
    </div>

    <button class="btn btn-primary mt-3" wire:click="sendMessage">Send</button>

    {{-- Alert --}}
    <div style="position:absolute;"
            class="alert alert-success collapse mt-3"
            role="alert" id="alertSuccess">Message send!
    </div>

    
    <script>
        window.livewire.on('messageSuccess', function(){
            //shows alert
            $("#alertSuccess").fadeIn("slow");

            // hide alert after 3 seconds
            setTimeout(function(){ $("#alertSuccess").fadeOut("slow"); }, 3000);
        });
    </script>

</div>
