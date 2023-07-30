<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
interface SplSubject
{
  public function attach(SplObserver $observer);// permet de rajouter un observer a un objet
  public function detach(SplObserver $observer);// permet de retirer  un observer a un objet
  public function notify();
}

interface SplObserver
  {
    public function update(SplSubject $subject);
  }


?> 

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>