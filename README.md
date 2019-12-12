# Some recruation jobs what i have done
  


## Task 1 

<p>Napisz proste rozwiązanie wykorzystujące API do pobierania informacji o lokalizacji na podstawie adresu IP.</p>
            <p>Link do dokumentacji: <a href="https://ip-api.com/docs" target="_blank">https://ip-api.com/docs</a>.</p>
            <p>Klasa po dostarczeniu adresu IP powinna móc zwrócić: kraj, kod iso, miasto i kod pocztowy. Kod powinien być prosty, ale uniwersalny i elastyczny.</p>

## Task 2
Oprogramuj poniższy formularz, tak aby po wpisaniu adresu IP w pole tekstowe pozostałe pola uzupełniały się automatycznie. Możesz wykorzystać czysty js lub dowolną bibliotekę.
Wykorzystaj to samo API co w zadaniu 1: <a href="https://ip-api.com/docs" target="_blank">https://ip-api.com/docs</a>

```html
<div class="form-container">
    <form action="#">
        <div class="form-element">
            <label>IP</label>
            <input type="text" name="ip" />
        </div>
        <div class="form-element">
            <label>Country</label>
            <input type="text" name="country" readonly />
        </div>
        <div class="form-element">
            <label>City</label>
            <input type="text" name="city" readonly />
        </div>
        <div class="form-element">
            <label>Zip</label>
            <input type="text" name="zip" readonly />
        </div>
    </form>
</div>
```
## Task 3

> Opisz lub przedstaw na diagramie rozwiązanie poniższego problemu.

System wykorzystuje relacyjną bazę danych SQL. Każdy użytkownik systemu może mieć przypisaną przynależność do jednego lub wielu krajów. 
Jakie tabele i ich relacje najlepiej spełnią to wymaganie? Zaproponuj tabele wraz z kluczami głównymi i obcymi.
