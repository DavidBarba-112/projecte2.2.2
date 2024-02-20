<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiles.css">
    <title>Document</title>

</head>

<body>
<?php 

session_start();


?>


    <header>
        <hgroup>
          <h1>
         <?php if (!isset($_SESSION['user']) || $_SESSION['user']['rol'] != 'Administrador') {
        echo "Benbingut " . $_SESSION['user']['email'];
  }  ?>
          </h1>
          <a  href="logout.php?logout=true">&larr; Cerrar session</a>
        </hgroup>
      </header>
      
      <nav>
        <ul>
          <li><a class="brick dashboard" href="/projecte2.2.2/index.php?controlador=Llistat&accion=llistat"> <img src="libro.png" width="3px" height="4px" span class='icon ion-home'></span>Llistat Llibres</a></li>
          <li><a class="brick pages" href="/projecte2.2.2/index.php?controlador=Llistatvenut&accion=llistatvenut"> <img src="librov.png" span class='icon ion-document'></span>Libros vendidos</a></li>
          <li><a class="brick navigation" href="#"><span class='icon ion-android-share-alt'></span>Navigation</a></li>
          <li><a class="brick users" href="#"><span class='icon ion-person'></span>Users</a></li>
          <li><a class="brick settings" href="#"><span class='icon ion-gear-a'></span>Website Settings</a></li>
        </ul>
      </nav>
      
      <div id="content" class="pages">
      
        
      <header>
          <div class="brick identify">
           <img src="time-and-calendar2.png" span class="icon ion-document"></span>
          </div>
      
          <a href="#"><div class="brick title">
            
          <h2>Calendario</h2>

          </div> </a> 
      
          <div class="brick close">
            <span class="text">Close</span>
            <span class="icon ion-close"></span>
          </div>
      
      
          <div class="brick save">
            <span class="text">Save</span>
            <span class="icon ion-checkmark"></span>
          </div>
          
      
        </header>
      
      
      
        <div class="brick closed">
          <hgroup>
            <h2>Crear ....</h2>
            <a href="#" class="icon ion-close js-close close"></a>
            <form>
              <input type="text" />
            </form>
          </hgroup>
        </div>
      
        <div class="brick closed">
          <hgroup>
            <h2>Crear ....</h2>
            <a href="#" class="icon ion-close js-close close"></a>
            <form>
              <textarea></textarea>
            </form>
          </hgroup>
        </div>
      
        <div class="brick closed">
          <hgroup>
            <h2>Crear ....</h2>
            <a href="#" class="icon ion-close js-close close"></a>
            <form>
              <textarea></textarea>
            </form>
          </hgroup>
        </div>
      
        <div class="brick closed">
          <hgroup>
            <h2>Crear ....</h2>
            <a href="#" class="icon ion-close js-close close"></a>
            <form>
              <textarea></textarea>
            </form>
          </hgroup>
        </div>
      
      
      </div>
      <footer>
      
      </footer>
      
      
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
        (function() {
    var tap;
  
    tap = "click";
  
    if (Modernizr.touch) {
      tap = "touchstart";
    }
  
    $(document).on(tap, '.brick.closed', function(event) {
      var $this;
      $this = $(this);
      $this.animate({
        'width': '100%'
      }, 'fast', function() {});
      $this.removeClass('closed');
      return $this.addClass('open');
    });
  
    $(document).on(tap, '.brick a.js-close', function(event) {
      var $brick;
      $brick = $(this).closest('.brick');
      return $brick.animate({
        'width': '120px'
      }, 'fast', function() {
        $brick.removeClass('open');
        return $brick.addClass('closed');
      });
    });
  
  }).call(this);
  
  //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBOztFQUFBLEdBQUEsR0FBTTs7RUFDTixJQUFxQixTQUFTLENBQUMsS0FBL0I7SUFBQSxHQUFBLEdBQUssYUFBTDs7O0VBRUEsQ0FBQSxDQUFFLFFBQUYsQ0FBVyxDQUFDLEVBQVosQ0FBZSxHQUFmLEVBQW9CLGVBQXBCLEVBQXFDLFFBQUEsQ0FBQyxLQUFELENBQUE7QUFDckMsUUFBQTtJQUFFLEtBQUEsR0FBUSxDQUFBLENBQUUsSUFBRjtJQUNSLEtBQUssQ0FBQyxPQUFOLENBQWM7TUFBRSxPQUFBLEVBQVM7SUFBWCxDQUFkLEVBQW1DLE1BQW5DLEVBQTJDLFFBQUEsQ0FBQSxDQUFBLEVBQUEsQ0FBM0M7SUFDQSxLQUFLLENBQUMsV0FBTixDQUFrQixRQUFsQjtXQUNBLEtBQUssQ0FBQyxRQUFOLENBQWUsTUFBZjtFQUptQyxDQUFyQzs7RUFNQSxDQUFBLENBQUUsUUFBRixDQUFXLENBQUMsRUFBWixDQUFlLEdBQWYsRUFBb0IsbUJBQXBCLEVBQXlDLFFBQUEsQ0FBQyxLQUFELENBQUE7QUFDekMsUUFBQTtJQUFFLE1BQUEsR0FBUyxDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsT0FBUixDQUFnQixRQUFoQjtXQUNULE1BQU0sQ0FBQyxPQUFQLENBQWU7TUFBRSxPQUFBLEVBQVM7SUFBWCxDQUFmLEVBQXFDLE1BQXJDLEVBQTZDLFFBQUEsQ0FBQSxDQUFBO01BQzNDLE1BQU0sQ0FBQyxXQUFQLENBQW1CLE1BQW5CO2FBQ0EsTUFBTSxDQUFDLFFBQVAsQ0FBZ0IsUUFBaEI7SUFGMkMsQ0FBN0M7RUFGdUMsQ0FBekM7QUFUQSIsInNvdXJjZXNDb250ZW50IjpbInRhcCA9IFwiY2xpY2tcIlxudGFwID1cInRvdWNoc3RhcnRcIiBpZiBNb2Rlcm5penIudG91Y2hcblxuJChkb2N1bWVudCkub24gdGFwLCAnLmJyaWNrLmNsb3NlZCcsIChldmVudCkgLT5cbiAgJHRoaXMgPSAkKHRoaXMpXG4gICR0aGlzLmFuaW1hdGUgeyAnd2lkdGgnOiAnMTAwJScgfSwgJ2Zhc3QnLCAoKSAtPlxuICAkdGhpcy5yZW1vdmVDbGFzcygnY2xvc2VkJylcbiAgJHRoaXMuYWRkQ2xhc3MoJ29wZW4nKVxuXG4kKGRvY3VtZW50KS5vbiB0YXAsICcuYnJpY2sgYS5qcy1jbG9zZScsIChldmVudCkgLT5cbiAgJGJyaWNrID0gJCh0aGlzKS5jbG9zZXN0KCcuYnJpY2snKVxuICAkYnJpY2suYW5pbWF0ZSB7ICd3aWR0aCc6ICcxMjBweCcgfSwgJ2Zhc3QnLCAoKSAtPlxuICAgICRicmljay5yZW1vdmVDbGFzcygnb3BlbicpXG4gICAgJGJyaWNrLmFkZENsYXNzKCdjbG9zZWQnKVxuIl19
  //# sourceURL=coffeescript

</script>
</html>