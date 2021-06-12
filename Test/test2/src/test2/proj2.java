package test2;

import java.sql.Time;
import java.util.concurrent.TimeUnit;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.testng.Assert;
import org.testng.annotations.Test;



public class proj2 {
	@Test
	public  static void _01_valid_Login_for_Exam_Coordinator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[4]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("john");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("john123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		System.out.println("login Successful");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}

	@Test
	public  static void _02_Publish_Exam_Coordinator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[4]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("john");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("john123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div/form/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
		Thread.sleep(1000);
		
		
		
		
		System.out.println("Publish Successful");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _03_valid_Login_for_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		System.out.println("login Successful");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _04_invalid_Login_for_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha456");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		System.out.println("login Successful");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _05_view_Events_for_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/ul/li[1]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div[2]/button")).click();
		Thread.sleep(1000);
		
		
		
		System.out.println("Viewed Events successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _06_update_Event_details_for_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/ul/li[2]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div[2]/div/div[1]/h6/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[1]/input")).sendKeys("11");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[2]/input")).sendKeys("Eventide");
		Thread.sleep(1000);
		Select se3 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[3]/select")));
		se3.selectByVisibleText("Special Events");
		Thread.sleep(1000);

		Select se4 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[4]/select")));
		se4.selectByVisibleText("Anokha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[5]/input")).sendKeys("4");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[2]/button[2]")).click();
		Thread.sleep(1000);
		
		
		
		
		
		
		
		
		
		System.out.println("Updated Events data successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _07_view_Grace_Marks_in_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[1]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div/button")).click();
		Thread.sleep(1000);
		
		
		
		
		
		
		
		
		
		System.out.println("Viewed grace marks successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	
	@Test
	public  static void _08_generate_Grace_Marks_list_in_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[2]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div[2]/form/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div[1]/button")).click();
		Thread.sleep(1000);
		
		
		
		
		
		
		
		
		
		System.out.println("Generated grace marks successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _09_update_Grace_Marks_list_in_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[3]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div[2]/div/div[2]/div/table/tbody/tr[1]/td[10]/form/button")).click();
		Thread.sleep(2000);
		Select se8 = new Select(driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/div[8]/select")));
		se8.selectByVisibleText("4");
		Thread.sleep(1000);
		
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/button")).click();
		Thread.sleep(1000);
		
		
		
		System.out.println("Updated grace marks successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	
	@Test
	public  static void _10_Add_Student_Info_in_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[3]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div[2]/div/div[1]/h6/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[1]/input")).sendKeys("Lalitha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[2]/input")).sendKeys("CB.EN.U4CSE18117");
		Thread.sleep(1000);
		
		
		
		
		
		Select se9 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[3]/select")));
		se9.selectByVisibleText("ECE");
		Thread.sleep(1000);
		Select se10 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[4]/select")));
		se10.selectByVisibleText("2nd Year");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[5]/input")).sendKeys("C");
		Thread.sleep(1000);
		
		
		Select se11 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[6]/select")));
		se11.selectByVisibleText("Sports");
		Thread.sleep(1000);
		Select se12 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[7]/select")));
		se12.selectByVisibleText("Cricket");
		Thread.sleep(1000);
		Select se13 = new Select(driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[1]/div[8]/select")));
		se13.selectByVisibleText("3");
		Thread.sleep(1000);
		
		
		driver.findElement(By.xpath("/html/body/div[1]/div/div/div[1]/div/div/form/div[2]/button[2]")).click();
		Thread.sleep(1000);
		
		System.out.println("Added Student Info successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	@Test
	public  static void _11_view_Grace_Marks_list_in_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/ul/li[1]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
		Thread.sleep(2000);
		
		
		
		
		System.out.println("Viewed grace marks Events successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	
	@Test
	public  static void _12_view1_Grace_Marks_list_in_Grace_Mark_Allocator() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
	    	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[5]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/ul/li[2]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
		Thread.sleep(2000);
		
		
		
		
		System.out.println("Viewed1 grace marks Events successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
	}
	
//	@Test
//	public  static void _13_Logout_for_Grace_Mark_Allocator() throws InterruptedException {
//		// TODO Auto-generated method stub
//		
//		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
//	    	WebDriver driver = new ChromeDriver();
//		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
//		driver.manage().window().maximize();
//		driver.get("http://localhost/SGMC/");
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[4]")).click();
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/button")).click();
//		Thread.sleep(1000);
//		driver.findElement(By.xpath("/html/body/div[1]/div[2]/div/div[2]/div/div/div[3]/form/button")).click();
//		Thread.sleep(1000);
//
//		
//		System.out.println("logout Successful");
//		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
//		Thread.sleep(1000);
//	}
//
//	
//
//	
	
	
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
	_01_valid_Login_for_Exam_Coordinator();
	_02_Publish_Exam_Coordinator();
	_03_valid_Login_for_Grace_Mark_Allocator();
	_04_invalid_Login_for_Grace_Mark_Allocator();
	_05_view_Events_for_Grace_Mark_Allocator();
	_06_update_Event_details_for_Grace_Mark_Allocator();
	_07_view_Grace_Marks_in_Grace_Mark_Allocator();
	_08_generate_Grace_Marks_list_in_Grace_Mark_Allocator();
	
	
	_09_update_Grace_Marks_list_in_Grace_Mark_Allocator();
	_10_Add_Student_Info_in_Grace_Mark_Allocator();
	 _11_view_Grace_Marks_list_in_Grace_Mark_Allocator();
	 _12_view1_Grace_Marks_list_in_Grace_Mark_Allocator();
	 //_13_Logout_for_Grace_Mark_Allocator();
	}
	
	
	
}

