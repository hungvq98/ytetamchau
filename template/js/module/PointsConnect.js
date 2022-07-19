export default function PointsConnect() {
  // $('.shape-point-des').bezier({
  //     strokeColor :'#FF9900',
  //     strokeWidth : 1,
  //     opacity :1,
  //     fill :'none'

  // });

  // $('.test-i').bezier({
  //     strokeColor :'#FF9900',
  //     strokeWidth : 1,
  // });

  const cate = document.querySelectorAll(".sec-cate")

  if(cate) {
    var mySVG = $(".sec-cate").connect();

    const listPointStart = document.querySelectorAll(".shape-point");
    const listPointEnd = document.querySelectorAll(".shape-point-des");
  
    const createLine = () => {
      listPointStart.forEach((ele, i) => {
        mySVG.drawLine({
          left_node: ele,
          right_node: listPointEnd[i],
          horizantal_gap: 5,
          style: "solid",
          status: "cus",
          width: "1",
        });
        // $(".des-12").draggable({
        //   drag: function (event, ui) {
        //     mySVG.redrawLines();
        //   },
        // });
        // $("#des-12").draggable({
        //   drag: function (event, ui) {
        //     mySVG.redrawLines();
        //   },
        // });
      });
    };
    createLine();
  
    window.addEventListener("resize", () => {
      createLine();
    });

  }
}
