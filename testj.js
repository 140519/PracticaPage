const {By,Key,Builder} = require("selenium-webdriver");
require("chromedriver");
var assert = require("assert")

describe('Probar calculadora', function(){
    
    it('sumar dos numeros',function(){
        let driver =  new Builder().forBrowser("chrome").build();
         driver.get("http://localhost:8080/proyecto1/vistas/login.php");
        
        username = driver.findElement(By.id ("txtUsername"));
        password = driver.findElement(By.id ("txtPassword"));
        butts=driver.findElement(By.name("Submit"));
        username.sendKeys("win");
        password.sendKeys("win1234");
        butts.click();
        
         driver.findElement(By.linkText('http://localhost:8080/proyecto1/vistas/login.php')).click();
        const title = driver.getTitle();

        assert.equal(title,'http://localhost:8080/proyecto1/vistas/admin_page.php');
    });

    
});