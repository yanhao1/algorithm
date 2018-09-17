package main

import (
	"fmt"
)

func  findSmall(arr []int) int {
	small := arr[0]
	small_index :=0
	for i:=0;i<len(arr);i++ {
		if arr[i] < small{
			small = arr[i]
			small_index =i
		}
	}
	return small_index
}

func selectSort(arr []int) []int{
	size := len(arr)
	newArr := make([]int,size)
	for i:=0;i<size ;i++ {
		small := findSmall(arr)
		newArr[i] = arr[small]
		arr = append(arr[:small],arr[small+1:]...)
	}
	return newArr
}

func main()  {
	s := []int{4,5,7,1,2,6,21}
	fmt.Println(selectSort(s))  //[1 2 4 5 6 7 21]
}
