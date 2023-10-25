# zadanie_dodatkowe


Zadanie: Tworzenie Systemu ERP z Zarządzaniem Pracownikami w
HTML, PHP oraz MySQL

Twórcy zadania: Karol Lach, Karol Madej

Część 1: Tworzenie Struktury HTML
1. Stwórz stronę HTML formularzami do dodawania produktów, klientów oraz pracowników.
2. Na stronie dodaj równiez sekcje do przeglądania produktów, klientów i pracownikow.

Cześć 2: Tworzenie Bazy Danych
1. Utwórz bazę danych o nazwie ERPDatabase.
2. W bazie danych utwórz pięć tabel:
  Products zawierającą informacje o produktach (np, ID, nazwa, opis, cena, dostępność itp).
  Customers zawierającą dane klientów (np. ID, imię, nazwisko, adres, e-mail itp)
  Orders zawierającą informacje o zamówieniach (np. ID zamowienia, data zamówienia, klient, produkt itp).
  Employees zawierającą dane pracowników (np. ID, imię, nazwisko. stanowisko, wynagrodzenie itp.).
  EmployeeActions Zawierająca informacje o akcjach pracowników na produktach i klientach (np. ID akcji, ID pracownika, typ akcji, ID produktu/klienta itp.).
  Pamiętaj, aby odpowiednio dobrać typy danych dla każdej kolumny.
4. Wypełnij tabele przykładowymi danymi.

Część 3: Tworzenie PHP Backend
1. Stwórz pliki PHP do obsługi formularzy oraz przetwarzania danych; 
  add_product.php dla dodawania produktu.
  edit_product.php dla edycji produktu. 
  delete_product.php dla usuwania produktu.
  add_customer.php dla dodawania klienta.
  edit_customer.php dla edycji klienta.
  delete_customer.php dla usuwania klienta. 
  view_products.php dla przeglądania produktów. 
  view_customers.php dla przeglądania klientów.
  add_employee.php dia dodawania pracownika.
  view_history.php dla przeglądania historii akcji pracowników.

Część 4: Implementacja Akcji Pracownika
1. W plikach PHP obsługujących akcje pracownika (np. add_product.php, add_customer.php), dodaj kod, który będzie zapisywał akcje pracownika w tabeli EmployeeAction.

Część 5: Logowanie i Rejestracja Klienta
1. Stwórz stronę logowania i rejestracji dla klienta w HTML.
2. Dodaj formularze logowania i rejestracji oraz ich obsługę w plikach PHP (login.php i register.php).
3. Po zalogowaniu klienta, umozliw mu składanie zamówień.

Wskazówki:
Skorzystaj z formularzy HTML do pobierania danych od uzytkownika.
Wykorzystaj PHP do przetwarzania tych danych i interakcji z bazą danych.
Upewnij się, ze masz skonfigurowany serwer, który obsługuje PHP
Mozesz uzyć MySQL lub innego systemu zarządzania bazą danych, którego preferujesz.

To zadanie obejmuje tworzenie strony internetowej w HTML, tworzenie i zarządzanie bazą danych w MySQL oraz obsługę operacji na bazie danych za pomocą PHP. Oczywiście, to tylko szkic, więc w miarę potrzeb mozesz dodać więcej funkcjonalności lub ulepszyć interfejs użytkownika. Powodzenia!

Po skończeniu zadania i oddaniu do sprawdzenia w formie ocenienia, uczeń może otrzymać dodatkową ocenę za zadanie na przedmiotach zawodowych u wyżej wymienionych nauczycieli.

Czas na zrobienie zadania: 10.12.2023
