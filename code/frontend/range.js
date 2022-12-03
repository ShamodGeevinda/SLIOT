module.exports = (req, res) => {
  res.header("Content-Range", "posts 0-20/20");
  next();
};
