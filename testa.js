const {Builder, By, until} = require('selenium-webdriver');
var assert = require("assert")
describe('Probar calculadora', function(){
    it('sumar dos numeros',function(){
        assert.equal(5,objecalculadora.suma(2,3))
    });
(async function example() {
    const driver = await new Builder().forBrowser('chrome').build();

    try {
        await driver.get('https://www.google.com');
        await driver.findElement(By.name('q')).sendKeys('nehalist');
        await driver.findElement(By.id('tsf')).submit();
        await driver.wait(until.elementLocated(By.id('search')));
        await driver.findElement(By.linkText('nehalist.io')).click();
        await driver.wait(until.titleIs('nehalist.io'));
    } finally {
        await driver.quit();
    }
})();