package test1;
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

public class projt1 {
	@Test
	public  static void _01_valid_Login_for_Class_Advisor() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
      WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(6800);
		
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
		Thread.sleep(3000);

		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		
		System.out.println("login Successfull");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(2000);
}
@Test
	public  static void _02_view_Course_Marks_for_Class_Advisor() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(3000);
		
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
		Thread.sleep(3000);

		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/span")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/ul/li[1]/a")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div[2]/button")).click();
		Thread.sleep(3000);


		
		System.out.println("Viewed Course Marks Successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(3000);
}

@Test
	public  static void _04_Allocation_for_Events_for_Class_Advisor() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
		Thread.sleep(3000);

		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[1]/a")).click();
		Thread.sleep(3000);
		

		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div/button")).click();
		Thread.sleep(3000);


		
		System.out.println("Allocation for Events done Successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
}
@Test
	public  static void _05_Update_Allocation_for_Events_for_Class_Advisor() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
		Thread.sleep(3000);

		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[3]/a")).click();
		Thread.sleep(2000);
		

		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/table/tbody/tr[6]/td[14]/form/button")).click();
		Thread.sleep(1000);
driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div[2]/button")).click();
		Thread.sleep(1000);





		
		System.out.println("Updation for Events done Successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
}

@Test
	public  static void _06_view_Allocation_for_Events_for_Class_Advisor() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
		Thread.sleep(2000);

		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("surekha");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[5]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/div[2]/button")).click();
		Thread.sleep(1000);





		
		System.out.println("Viewed Marks for Events done Successfully");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
}
@Test
	public static void _07_Edit_profile_for_Class_Advisor() throws InterruptedException
	{
			// TODO Auto-generated method stub
			
			System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        		WebDriver driver = new ChromeDriver();
			driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
			driver.manage().window().maximize();
			driver.get("http://localhost/SGMC/");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
			Thread.sleep(2000);
			driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
			Thread.sleep(2000);
			
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


			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/div[3]/input")).clear();

			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/div[3]/input")).sendKeys("rekhav");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/button")).click();


			Thread.sleep(1000);
			
			System.out.println("Updated profile Successfully");
			driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
			Thread.sleep(3000);
	}


@Test
	public static void _08_change_password_for_Class_Advisor() throws InterruptedException
	{
			// TODO Auto-generated method stub
			
			
			System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        		WebDriver driver = new ChromeDriver();
			driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
			driver.manage().window().maximize();
			driver.get("http://localhost/SGMC/");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
			Thread.sleep(1000);



			driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("krishna");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("krishna456");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
			Thread.sleep(1000);

			driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/span")).click();
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/ul/li[3]/a")).click();
			Thread.sleep(1000);
			
			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div/div[2]/div/form/div[1]/div[1]/div/input")).sendKeys("krishna456");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div/div[2]/div/form/div[1]/div[2]/div/input")).sendKeys("krishna4567");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div/div[2]/div/form/div[1]/div[3]/div/input")).sendKeys("krishna4567");
			Thread.sleep(1000);
			driver.findElement(By.xpath("/html/body/div/div/div/div/div/div/div[2]/div/form/div[2]/input[2]")).click();
			Thread.sleep(1000);

			System.out.println("Changed Password Successfully");
			driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
			Thread.sleep(3000);
	}

@Test
	public  static void _09_invalid_Login_for_Class_Advisor() throws InterruptedException {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
        	WebDriver driver = new ChromeDriver();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.manage().window().maximize();
		driver.get("http://localhost/SGMC/");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[1]")).click();
		Thread.sleep(1000);

		driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("varun");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("surekha123");
		Thread.sleep(1000);
		driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
		
		System.out.println("login Failed");
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		Thread.sleep(1000);
}

@Test
public  static void _10_valid_Login_for_Course_Mentor() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[2]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	System.out.println("login Successful");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _11_view_Course_Marks_for_Course_Mentor() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[2]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/ul/li/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
	Thread.sleep(1000);


	System.out.println("viewed course marks Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _12_view_Course_Intervals_for_Course_Mentor() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[2]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[3]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
	Thread.sleep(1000);


	System.out.println("viewed course intervals Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _13_updated_Course_Intervals_for_Course_Mentor() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[2]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[1]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/table/tbody/tr[2]/td[5]/form/button")).click();
	Thread.sleep(1000);
	Select se = new Select(driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/div[3]/select")));
	se.selectByVisibleText("A+");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/button")).click();
	Thread.sleep(1000);



	System.out.println("Updated course intervals Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _14_GoBack_updated_Course_Intervals_for_Course_Mentor() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[2]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[1]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
	Thread.sleep(1000);
	



	System.out.println("Goback Updated course intervals Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}

@Test
public  static void _15_view_details_for_Course_Mentor() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[2]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[3]/ul/li[1]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form/a")).click();
	Thread.sleep(1000);
	



	System.out.println("viewed course mentor details Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _16_valid_Login_for_Course_Handling_Faculty() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	System.out.println("login Successful");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _17_update_Course_Marks_for_Course_Handling_Faculty() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[1]/ul/li[3]/a")).click();
	Thread.sleep(1000);
	
	driver.findElement(By.xpath("/html/body/div/div/div/div[2]/div/div[2]/div/button")).click();
	Thread.sleep(1000);
	
	
	
	
	System.out.println("Updated Course Marks Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}

@Test
public  static void _18_view_grace_Marks_for_Course_Handling_Faculty() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[1]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
	Thread.sleep(1000);
	
	
	
	
	
	System.out.println("Viewed Grace Marks Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}
@Test
public  static void _19_update_grace_Marks_for_Course_Handling_Faculty() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[3]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/table/tbody/tr[1]/td[6]/form/button")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form[1]/div[3]/input")).clear();
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form[1]/div[3]/input")).sendKeys("65");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/form[1]/button")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/button")).click();
	Thread.sleep(1000);
	
	
	
	
	
	
	
	
	System.out.println("Updated Grace intervals Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}

@Test
public  static void _20_view_grade_intervals_for_Course_Handling_Faculty() throws InterruptedException {
	// TODO Auto-generated method stub
	
	System.setProperty("webdriver.chrome.driver","C:\\browserselenium\\chromedriver.exe");
    	WebDriver driver = new ChromeDriver();
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	driver.manage().window().maximize();
	driver.get("http://localhost/SGMC/");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/button")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div[1]/nav/div/div[2]/ul/li[2]/div/div/a[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[1]")).sendKeys("karan");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[2]")).sendKeys("karan134");
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/form/input[3]")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/span")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div[2]/div/nav/ul/li[2]/ul/li[5]/a")).click();
	Thread.sleep(1000);
	driver.findElement(By.xpath("/html/body/div/div/div/div/div/div[2]/div/button")).click();
	Thread.sleep(1000);
	
	System.out.println("viewed Grade intervals Successfully");
	driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
	Thread.sleep(1000);
}


	
		public static void main(String[] args) throws InterruptedException {
			// TODO Auto-generated method stub
			_01_valid_Login_for_Class_Advisor();
			_02_view_Course_Marks_for_Class_Advisor(); 
			
			_04_Allocation_for_Events_for_Class_Advisor();
			_05_Update_Allocation_for_Events_for_Class_Advisor();
			_06_view_Allocation_for_Events_for_Class_Advisor();
			_07_Edit_profile_for_Class_Advisor();
			_08_change_password_for_Class_Advisor() ;
			_09_invalid_Login_for_Class_Advisor();
			_10_valid_Login_for_Course_Mentor();
			_11_view_Course_Marks_for_Course_Mentor();
			_12_view_Course_Intervals_for_Course_Mentor() ;
			_13_updated_Course_Intervals_for_Course_Mentor();
			_14_GoBack_updated_Course_Intervals_for_Course_Mentor();
			_15_view_details_for_Course_Mentor();
			_16_valid_Login_for_Course_Handling_Faculty();
			_17_update_Course_Marks_for_Course_Handling_Faculty();
			_18_view_grace_Marks_for_Course_Handling_Faculty();
			_19_update_grace_Marks_for_Course_Handling_Faculty();
			_20_view_grade_intervals_for_Course_Handling_Faculty();
			
			
			
			
	
		

	}
		
}

		
		