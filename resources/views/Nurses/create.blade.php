<div class="container">

    <h4>CREATE NURSES INFO</h4>   
    <div class="row">
      <form class="col s12" action="/nurses/create" method="POST">
      @csrf
        <div class="row">
          <div class="input-field col s6">
        
            <input placeholder="Full name"id="name" type="text" name="name">
          </div>          
        </div>
      
        
        <div class="row">
          <div class="input-field col s12">
        
            <input placeholder="Contact number" id="contact" type="tel" name="contact">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
        
            <input placeholder="Department" id="department" type="text" name="department">
          </div>
        </div>
    
        <div class="row">
          <div class="input-field col s12">
        
            <input placeholder="ID" id="ID" type="number" name="ID">
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <button class = "section-btn" type="submit" name="action">Submit</button>           
          </div>
        </div>
      </form>
    </div>
  </div>  