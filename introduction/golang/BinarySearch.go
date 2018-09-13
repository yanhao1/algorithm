package main

import "fmt"

func FindSearch(list []int,i int) bool {
	low :=0
	high := len(list)-1
	for low<= high {
		mid :=(low + high)/2
		if list[mid] ==i{
			return true
		}

		if list[mid] <i{
			low = mid+1
		}else {
			high= mid-1
		}
	}
	return false
}

func main()  {
	fmt.Println(FindSearch([]int{1,2,3,5,6,7,8,9,10},3))  //true
	fmt.Println(FindSearch([]int{1,2,3,5,6,7,8,9,10},22)) //false
}
