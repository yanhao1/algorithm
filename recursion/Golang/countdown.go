package main

import "fmt"

func countDown(i int)  {
	fmt.Println(i)

	if i<=0{
		return
	}else {
		countDown(i-1)
	}
}

func main()  {
	countDown(5)
}