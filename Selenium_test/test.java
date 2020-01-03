package selenium.dempo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;


public class main {

	public static void main(String[] args) {
		try {
			System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
			WebDriver driver = new ChromeDriver();

			// register new user
			driver.get("http://127.0.0.1:8000/register");
			driver.manage().window().maximize();
			String email = "exap@esi.dz";

			// fill the informations

			driver.findElement(By.id("nom")).sendKeys("mimene");
			driver.findElement(By.id("prenom")).sendKeys("younes");
			driver.findElement(By.id("groupe")).sendKeys("5");
			driver.findElement(By.id("email")).sendKeys(email);
			driver.findElement(By.id("password")).sendKeys("aa123123");
			driver.findElement(By.id("password-confirm")).sendKeys("aa123123");

			//submit
			Thread.sleep(1000);
			driver.findElement(By.id("submit")).click();

			Thread.sleep(3000);

			// request a permutation
			driver.findElement(By.id("group")).sendKeys("4");
			driver.findElement(By.id("btn")).click();
			Thread.sleep(3000);

			// go to the Admin page
			driver.get("http://localhost:8000/admin");
			Thread.sleep(2000);

			// check if we are in the Admin page
			String at = driver.getTitle();
			String et = "Admin page";
			driver.close();
			if (at.equalsIgnoreCase(et)) {
				System.out.println("Test passed");
			}else {
				System.out.println("Failure");
			}
		} catch(Exception e) {
			System.out.println("Failure");
		}
	}

}
