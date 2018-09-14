package main

import (
	"math/rand"
	"time"
	"fmt"
)

//生成若干不重复的随机数组
func RandonArray(count int,start int,end int) []int {

	//检查范围
	if end < start || (end -start) < count{
		return nil
	}
	//存slice
	nums := make([]int,0)
	//随机数生成器   加入时间戳保证每次生成的随机数都不一样
	r := rand.New(rand.NewSource(time.Now().UnixNano()))

	for len(nums) <count{
		//生成随机数
		num := r.Intn((end - start)) + start

		exist := false

		for _,v := range nums{
			if v == num{
				exist = true
				break
			}
		}
		if !exist{
			nums = append(nums,num)
		}
	}
	return  nums
}

//[63 10 36 44 1 86 70 26 87 41]

func main() {
	fmt.Println(RandonArray(10,1,100))
}