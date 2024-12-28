<!-- View: language -->
 <div class="container">
       <h1>Choose your language</h1>
      <form action="{{route('display')}}" method="post">
            @csrf
            <select id="language" name="language">
                  <option value="Spanish">Spanish</option>
                  <option value="English">English</option>
                  <option value="Hindi">Hindi</option>
            </select>
            <input type="submit" value="Save"/>
      </form>
 </div>